/* eslint-disable react-native/no-inline-styles */
/* eslint-disable prettier/prettier */
import React, { Component } from 'react';
import {
  StyleSheet,
  View,
  ScrollView,
  Text,
  Dimensions,
  TouchableOpacity,
} from 'react-native';
import Images from '../../themes/Image/images';
import Color from '../../themes/colors';
import Icons from '../../themes/icons';
import TextInputComponent from '../../component/textInputComponent';
const screenWidth = Dimensions.get('screen').width;

const Register = () => {
    return (
      <ScrollView>
        <View>
          {/* <Image source={Icons.back} /> */}

          <View style={styles.logo}>
            {/* <Image source={Images.logo} /> */}
            <Text style={styles.title}>Đăng Ký</Text>
          </View>
          <View>
            <TextInputComponent
              icon={Icons.user}
              Placeholder="Tên người dùng"
            />
            <TextInputComponent icon={Icons.lock} Placeholder="Mật khẩu" />
            <TextInputComponent
              icon={Icons.confirm}
              Placeholder="Nhập lại mật khẩu"
            />
            <TextInputComponent
              icon={Icons.phone}
              Placeholder="Số điện thoại"
            />
            <TextInputComponent icon={Icons.email} Placeholder="Email" />
          </View>

          <View
            style={{ width: screenWidth, alignItems: 'center', marginTop: 25 }}
          >
            <TouchableOpacity style={styles.login}>
              <Text style={styles.loginText}>Đăng Nhập</Text>
            </TouchableOpacity>
          </View>

        </View>
      </ScrollView>
    );
  };

export default Register;

const styles = StyleSheet.create({
  logo: {
    alignItems: 'center',
    width: screenWidth,
  },
  title: {
    fontSize: 30,
    fontWeight: 'bold',
    color: Color.title,
  },
  input: {
    width: screenWidth - 70,
    borderColor: '#3C574D',
    borderWidth: 2,
    borderRadius: 10,
    marginLeft: 10,
  },
  username: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    marginTop: 35,
  },
  forgotPW: {
    marginLeft: 60,
  },
  forgotText: {
    color: Color.title,
  },
  login: {
    width: screenWidth / 1.5,
    height: 45,
    borderColor: '#3C574D',
    borderWidth: 2,
    borderRadius: 30,
    backgroundColor: '#3C574D',
    alignItems: 'center',
    justifyContent: 'center',
  },
  loginText: {
    color: '#F4B9A7',
    fontWeight: 'bold',
    fontSize: 15,
  },
  register: {
    width: screenWidth / 3,
    height: 35,
    borderColor: '#80BD5E',
    borderWidth: 2,
    borderRadius: 30,
    backgroundColor: '#80BD5E',
    alignItems: 'center',
    justifyContent: 'center',
  },
  registerText: {
    color: '#f98866',
    fontWeight: 'bold',
    fontSize: 12,
  },
});
