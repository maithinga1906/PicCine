/* eslint-disable react-native/no-inline-styles */
/* eslint-disable prettier/prettier */
import React, {Component} from 'react';
import { View, Text, Image,Dimensions, StyleSheet,ScrollView,TouchableOpacity } from 'react-native';
import Icons from '../../themes/icons';
const screenWidth = Dimensions.get('screen').width;

const Profile = () => {
  return (
    <ScrollView>
      <View style={styles.content}>
        <View style={styles.avatar}>
          <Image style={styles.img} source={require('../../assets/Images/NAG/sunflowers.jpg')}/>
          <Image style={styles.avat} source={require('../../assets/Images/NAG/avata.jpg')}/>
          <TouchableOpacity style={styles.edit}>
            <Image source={Icons.edit}/>
          </TouchableOpacity>
        </View>
        <View style={styles.acc}>
          <TouchableOpacity style={styles.acc_qr}>
            <Image source={Icons.scan}/>
            <Text style={styles.text}>Thông tin</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.acc_qr}>
            <Image source={Icons.wallet}/>
            <Text style={styles.text}>Quản lý tài khoản</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.acc_qr}>
            <Image source={Icons.ticket}/>
            <Text style={styles.text}>Mã giảm giá</Text>
          </TouchableOpacity>
        </View>
      </View>
    </ScrollView>
  );
};

export default Profile;
const styles = StyleSheet.create({
img:{
    width: 374,
    height: 150
},
avatar:{ 
  alignItems: 'center',
  justifyContent: 'center'
},
avat:{
  width: 110,
  height: 110,
  borderRadius: 100,
  borderColor: '#F4B9A7',
  borderWidth:1,
  position: 'absolute',
},
edit:{
  position: 'absolute',
  left: 150,
  top: 100,
  width:20
},
acc:{
height: 79,
backgroundColor: '#F4B9A7',
flexDirection: 'row', 
},
acc_qr:{
  height: 79,
  width:110,
  alignItems: 'center',
  borderRightWidth:1,
  padding: 10,
  borderRightColor: '#C4C4C4',
},
text:{
  color: '#FFF9F9',
  fontWeight: 'bold',
  fontSize: 16,
  lineHeight:21, 
  textAlign: 'center',
},
content:{
  // flexDirection: 'row', 
  // alignItems: 'center',
  // justifyContent: 'center',
},

});