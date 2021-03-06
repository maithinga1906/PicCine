/* eslint-disable prettier/prettier */
/* eslint-disable react-native/no-inline-styles */
import React from 'react';
import { StyleSheet, View, Image, Text, TouchableOpacity } from 'react-native';
import { Colors } from 'react-native/Libraries/NewAppScreen';
//import Icon from 'react-native-vector-icons/thebook-appicon';
//import { NavigationUtils } from '../../navigations';
export default class IntroComponent extends React.PureComponent {
  render() {
    const { data } = this.props;
    const { imageSource, title, subTitle, statusButton } = data;
    return (
      <View style={styles.slide}>
        {/* <Icon name="ic-back" color="red" size={24} /> */}
        <View style={styles.topSlide}>
          <View style={{ justifyContent: 'flex-end' }}>
            <Image
              source={imageSource}
              style={{
                height: 230,
                width: 300,
              }}
            />
          </View>
          <View>
            <Text style={styles.title}>{title}</Text>
            <Text style={styles.subTitle}>{subTitle}</Text>
          </View>
        </View>

        {statusButton === true ? (
          <View style={styles.buttonGroup}>
            <TouchableOpacity style={styles.button}>
              <Text style={styles.textButton}>Bắt Đầu</Text>
            </TouchableOpacity>
          </View>
        ) : null}
      </View>
    );
  }
}

const styles = StyleSheet.create({
  slide: {
    flex: 1,
    alignItems: 'center',
  },
  topSlide: {
    alignItems: 'center',
    marginTop: 100,
  },
  title: {
    paddingHorizontal: 25,
    marginTop: 10,
    textAlign: 'center',
    fontFamily: 'SVN-ProximaNova',
    fontSize: 16,
    fontWeight: 'bold',
  },
  subTitle: {
    paddingHorizontal: 10,
    lineHeight: 27,
    marginTop: 15,
    textAlign: 'center',
    fontFamily: 'SVN-ProximaNova',
    fontSize: 13,
    color: Colors.grey,
  },
  buttonGroup: {
    alignItems: 'center',
    marginTop: 90,
  },
  button: {
    //marginTop: 20,
    backgroundColor: Colors.primary,
    width: 130,
    height: 40,
    alignItems: 'center',
    justifyContent: 'center',
    borderRadius: 3,
  },
  textButton: {
    fontSize: 15,
    color: Colors.white,
  },
});
