/* eslint-disable react-native/no-inline-styles */
/* eslint-disable prettier/prettier */
import React, {Component} from 'react';
import { View, Text, Image,Dimensions, StyleSheet,ScrollView,TouchableOpacity } from 'react-native';
import Icons from './../themes/icons';
const screenWidth = Dimensions.get('screen').width;

const Developing = () => {
  return(
    <ScrollView>
    <View style={styles.content1} >
     <Image source={Icons.logo}/>
     <View >
        <Text style={{fontWeight:'bold'}}>Chức năng này hiện đang được cập nhật!!</Text>
        <Text style={{fontWeight:'bold'}}>QÚY KHÁCH VUI LÒNG GHÉ LẠI SAU</Text>
     </View>
    </View>
  </ScrollView>
);
}
export default Developing;
const styles = StyleSheet.create({
//    content
content1:{
    width:screenWidth,
    height:screenWidth, 
    alignItems: 'center',
    justifyContent: 'center',
    top: 10
}
    });