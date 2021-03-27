import React, {Component} from 'react';
import { View, Text, Image,Dimensions, StyleSheet,ScrollView,TouchableOpacity } from 'react-native';
import Icons from '../../themes/icons';
const QR =()=>{
  return(
    <View>
        <Image style={styles.logo} source={Icons.cameraic}/>
    </View>
  );
}
export default QR;
const styles=StyleSheet.create({
  logo: {
    alignItems: 'center',
  }
  }
)