import React, { useState } from 'react';

import { Text, View, TouchableOpacity, StyleSheet, Image, Dimensions, TextInput, ScrollView } from 'react-native';
import DateTimePicker from '@react-native-community/datetimepicker';
import Icons from '../../themes/icons';
import UselessTextInput from '../../component/Input';
const screenWidth = Dimensions.get('screen').width;
const SetCalendar = () => {
  const [date, setDate] = useState(new Date());
  const [time, setTime] = useState(new Date());
  const [mode, setMode] = useState('date');
  const [show, setShow] = useState(false);
  // end date
  const [enddate, setEndDate] = useState(new Date());
  const [endtime, setEndTime] = useState(new Date());
  const [endmode, setEndMode] = useState('date');
  const [endshow, setEndShow] = useState(false);
  // const [address, setAddress] = useState('09-10-2020');

  const onChange = (event, selectedValue) => {
    setShow(Platform.OS === 'ios');
    if (mode == 'date') {
      const currentDate = selectedValue || new Date();
      setDate(currentDate);
      setMode('time');
      setShow(Platform.OS !== 'ios');
    } else {
      const selectedTime = selectedValue || new Date();
      setTime(selectedTime);
      setShow(Platform.OS === 'ios');
      setMode('date');
    }
  };

  const showMode = currentMode => {
    setShow(true);
    setMode(currentMode);
  };

  const showDatepicker = () => {
    showMode('date');
  };
  // end date
  const onChangeEndDate = (event, selectedEnd) => {
    setEndShow(Platform.OS === 'ios');
    if (endmode == 'date') {
      const currentDate = selectedEnd || new Date();
      setEndDate(currentDate);
      setEndMode('time');
      setEndShow(Platform.OS !== 'ios');
    } else {
      const selectedTime = selectedEnd || new Date();
      setEndTime(selectedTime);
      setEndShow(Platform.OS === 'ios');
      setEndMode('date');
    }
  };

  const showEndMode = currentMode => {
    setEndShow(true);
    setEndMode(currentMode);
  };

  const showEndDatepicker = () => {
    showEndMode('date');
  };
  return (
    <ScrollView>
      <View style={{ padding: 5, }}>
        <View style={styles.content}>
          <Image style={styles.img} source={require('../../assets/Images/NAG/1.jpg')} />
          <View style={{ paddingLeft: 10 }}>
            <Text style={styles.title}>Môn Thúc</Text>
            <Text style={{ fontSize: 16, lineHeight: 31 }}>Chụp ảnh cổ phong </Text>
            <Text style={{ color: 'red', fontWeight: 'bold', fontSize: 16, lineHeight: 31 }}> 100.000đ/giờ</Text>
          </View>
        </View>
        <View style={styles.date}>
          <Text style={styles.title}>Ngày và giờ chụp ảnh</Text>
          <View style={styles.section}>
            <TouchableOpacity style={styles.btn} onPress={showDatepicker}>
              <Text style={styles.datePickerStyle} >{formatDate(date, time)}</Text>
            </TouchableOpacity>
            {show && (
              <DateTimePicker
                testID='dateTimePicker'
                timeZoneOffsetInMinutes={0}
                value={date}
                mode={mode}
                is24Hour={true}
                display='default'
                onChange={onChange}
              />
            )}
          </View>
          <View style={styles.section}>
            <Text>* Chọn ngày và giờ kết thúc</Text>
            <TouchableOpacity style={styles.btn} onPress={showEndDatepicker}>
              <Text style={styles.datePickerStyle} >{formatEndDate(enddate, endtime)}</Text>
            </TouchableOpacity>
            {endshow && (
              <DateTimePicker
                testID='dateTimePicker'
                timeZoneOffsetInMinutes={0}
                value={enddate}
                mode={endmode}
                is24Hour={true}
                display='default'
                onChange={onChangeEndDate}
              />
            )}
          </View>
          
          <Text>Ngày:{formatTotalDate(date,enddate)} </Text>
          <Text>Giờ:{formatTotalTime(date,enddate)}</Text>
        </View>
        <Text style={styles.title}>Địa chỉ chụp ảnh</Text>
        <View style={styles.section}>
          <UselessTextInput
            multiline
            numberOfLines={2}
            onChangeText={text => onChangeText(text)}
            placeholder="Nhập địa chỉ chụp ảnh"
          />
        </View>
      </View>
    </ScrollView>
  );
};


const formatDate = (date, time) =>
{
  return `${date.getDate()}/${date.getMonth() +
    1}/${date.getFullYear()} ${time.getHours() - 7}:${time.getMinutes()} `;
};
const formatEndDate = (enddate, endtime) => 
{
  return `${enddate.getDate()}/${enddate.getMonth() + 
    1}/${enddate.getFullYear()} ${endtime.getHours() - 7}:${endtime.getMinutes()} `;
};
const formatTotalDate=(date,enddate)=>
{
  return `${(enddate.getDate())-(date.getDate())}`;
};
const formatTotalTime=(date,enddate)=>
{
  const diffInMs = Math.abs((enddate.getDate())-(date.getDate()));
  return  Math.abs(diffInMs / (1000 * 60 * 60));
  // return ` ${(endtime.getHours() - 7)-(time.getHours() - 7)}:${(endtime.getMinutes())-(time.getMinutes())}`;
};
export default SetCalendar;
const styles = StyleSheet.create({
  section: {
    alignItems: 'center',
    paddingBottom: 15,
    paddingTop: 15,

  },
  title: {
    borderBottomColor: '#A64244',
    borderBottomWidth: 1,
    fontWeight: 'bold',
    lineHeight: 31,
    fontSize: 16,
  },
  img: {
    width: screenWidth / 3,
    height: 105,
    borderRadius: 5
  },
  content: {
    flexDirection: 'row',
    padding: 10,
    paddingBottom: 15,

  },
  time: {
    opacity: 0.5
  },
  btn: {
    borderBottomColor: 'black',
    borderWidth: 1,
    padding: 10,
    width: 200,
    // flexDirection:'row',
  },
  datePickerStyle: {
    paddingLeft: 30,
    fontSize: 16
  },
});