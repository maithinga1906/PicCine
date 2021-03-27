// import React, {useState} from 'react';
import React, { useState } from 'react';

import {View, Button, Platform,Text} from 'react-native';
import DateTimePicker from '@react-native-community/datetimepicker';

const formatDate = (date) => {
    return `${date.getDate()}/${date.getMonth() +
      1}/${date.getFullYear()}`;
  };
export const Test = () => {
  const [date, setDate] = useState(new Date());
  const [time, setTime] = useState(new Date());
  const [mode, setMode] = useState('date');
  const [show, setShow] = useState(false);
  const formatTime = (time) => {
    return ` ${time.getHours()}:${time.getMinutes()}`;
  };
  const onChange = (event, selectedDate) => {
    const currentTime= selectedDate || time;
    setShow(Platform.OS === 'ios');
    setDate(currentTime);

  };

  const showMode = (currentMode) => {
    setShow(true);
    setMode(currentMode);
  };

  const showDatepicker = () => {
    showMode('date');
  };

  const showTimepicker = () => {
    showMode('time');
  };

  return (
    <View>
      <View>
        <Button onPress={showDatepicker} title="Show date picker!" />
        <Text >{formatDate(date)}</Text>
      </View>
      <View>
        <Button onPress={showTimepicker} title="Show time picker!" />
        <Text >{formatTime(time)}</Text>
      </View>
      {show && (
        <DateTimePicker
          testID="dateTimePicker"
          timeZoneOffsetInMinutes={0}
          value={date}
          mode={mode}
          display='default'
          is24Hour={true}
          display="default"
          onChange={onChange}
        />
      )}
    </View>
  );
};
export default Test;