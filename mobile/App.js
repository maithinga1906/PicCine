/* eslint-disable prettier/prettier */
/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

import React, { Component } from 'react';
import { StyleSheet } from 'react-native';

import { Colors } from 'react-native/Libraries/NewAppScreen';
import Intro from './src/screens/Intro/Intro';
import Login from './src/screens/Login/Login';
import Register from './src/screens/Register/Register';
import Noti from './src/screens/Notification/Noti';
import Confirm from './src/screens/ForgotPass/Confirm';
import FillEmal from './src/screens/ForgotPass/FillEmal';
import Profile from './src/screens/Profile/Profile';
import QR from './src/screens/Profile/QR';
import Review from './src/screens/Schedule/Review';
import Null from './src/screens/Schedule/Null';
import ConfirmSche from './src/screens/Schedule/ConfirmSche';
import WaitConfirm from './src/screens/Schedule/WaitConfirm';
import Developing from './src/screens/Developing';
import SetCalendar from './src/screens/Booking/SetCalendar';
import Payment from './src/screens/Booking/Payment';
import Transfer from './src/screens/Booking/Transfer';

import Test from './src/screens/Test';

export default class App extends Component {
  render() {
    return <WaitConfirm/>;
  }
}

const styles = StyleSheet.create({});
