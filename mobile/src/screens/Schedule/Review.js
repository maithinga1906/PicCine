/* eslint-disable react-native/no-inline-styles */
/* eslint-disable prettier/prettier */
import React, {Component} from 'react';
import { View, Text, Image,Dimensions, StyleSheet,ScrollView,TouchableOpacity } from 'react-native';
import Icons from '../../themes/icons';
const screenWidth = Dimensions.get('screen').width;
import NavigationUtils from '../../navigations/Utils'

const Review = () => {
  return(
    <ScrollView>
    <View style={styles.content}>
      <View style={styles.acc}>
        <TouchableOpacity style={styles.acc_qr} onPress={() => NavigationUtils.WaitContent()}>
          <Image source={Icons.check}/>
          <Text style={styles.text}>Chờ xác nhận</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.acc_qr} onPress={() => NavigationUtils.ConfirmContent()}>
          <Image source={Icons.tick}/>
          <Text style={styles.text}>Đã xác nhận</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.acc_qr}>
          <Image source={Icons.review}/>
          <Text style={styles.text}>Đánh giá</Text>
        </TouchableOpacity>
      </View>
    </View>
    <View style={{width:screenWidth}} >
      <View style={styles.content1}>
        <Image style={styles.img} source={require('../../assets/Images/NAG/1.jpg')}  resizeMode="cover" />
        <View style={{paddingLeft: 10,}}>
          <Text style={{fontWeight: 'bold'}}>Chụp ảnh cổ phong</Text>
          <Text >Từ nhiếp ảnh gia Ưu Vô </Text>
          <Text style={styles.time}><Image source={Icons.time} /> 13:00 23-03-2021</Text>
          <View style={{flexDirection: 'row'}}>
            <Text >Ngày hẹn:  23-03-2021</Text><Text style={{color:'red', fontWeight: 'bold'}}> 100k/giờ</Text>
          </View>
          <View style={{flexDirection: 'row'}}>
            <Text >Địa điểm:</Text>
            <Text style={{color:'#2BA8C3'}}>Bán đảo Sơn Trà, Đà Nẵng</Text>
          </View>
        </View>
       </View>
       <View style={styles.btnn}>
          <TouchableOpacity style={styles.btn}>
          <Text style={styles.txt}>Đánh giá</Text>
        </TouchableOpacity>
       </View>
      
    </View>
  </ScrollView>
);
}
export default Review;
const styles = StyleSheet.create({
    acc:{
    height: 79,
    flexDirection: 'row',
    borderBottomColor: '#A64244',
    borderBottomWidth: 1, 
    },
    acc_qr:{
      height: 79,
      width:110,
      alignItems: 'center',
      padding: 10,
    },
    text:{
      fontWeight: 'bold',
      fontSize: 16,
      lineHeight:21, 
      textAlign: 'center',
    },
//    content
img:{
    width: 60 ,
    height:95,
    borderRadius:5
  },
  content1:{
    flexDirection: 'row', 
    fontSize:16,
    padding: 10,
    paddingBottom: 15
  },
  time:{
    opacity:0.5
  },
  btn:{
    width:100,
    height: 35,
    borderColor: '#C2B328',
    borderWidth: 2,
    borderRadius: 5,
    backgroundColor: '#C2B328',
    alignItems: 'center',
    justifyContent: 'center',
  },
  txt:{
      color: 'black',
      fontWeight: 'bold',
      fontSize: 16,
  },
  btnn: {
    width: screenWidth,
    alignItems: 'center',
    justifyContent: 'center',
  },
    });