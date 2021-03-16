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

export default class App extends Component {
  render() {
    return <Register />;
  }
}

const styles = StyleSheet.create({});
