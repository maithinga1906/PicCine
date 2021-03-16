/* eslint-disable prettier/prettier */
import React, { Component } from 'react';
import { StyleSheet, View, SafeAreaView } from 'react-native';
import { Colors } from 'react-native/Libraries/NewAppScreen';
import Swiper from 'react-native-swiper';
import Images from '../../themes/Image/images';
import IntroComponent from './introComponent';

class Intro extends Component {
  static options(passProps) {
    return {
      topBar: {
        visible: false,
        drawBehind: true,
      },
    };
  }
  constructor(props) {
    super(props);
    this.state = { showButton: false };
  }
  render() {
    const INTROS = [
      {
        id: 1,
        imageSource: Images.intro1,
        title: 'ĐEM LẠI CÁC TRẢI NGHIỆM HÌNH ẢNH',
        subTitle:
          'Rất nhiều cuốn sách hay và chương trình thú vị được tích hợp trên hệ thống.',
        statusButton: false,
      },
      {
        id: 2,
        imageSource: Images.intro2,
        title: 'KẾT NỐI VỚI CÁC NHIẾP ẢNH GIA',
        subTitle:
          'Sách sẽ được giữ trong 2 giờ đồng hồ\n Hãy chắc chắn là bạn đến nhận kịp giờ.',
        statusButton: false,
      },
      {
        id: 3,
        imageSource: Images.intro3,
        title: 'CHÀO MỪNG BẠN ĐẾN VỚI PICCINE',
        subTitle:
          'Chọn một nơi yêu thích và tận hưởng cuốn sách mà yêu thích thôi nào.',
        statusButton: true,
      },
    ];
    return (
      <SafeAreaView style={{ flex: 1 }}>
        <View style={styles.topContainer}>
          <Swiper
            style={styles.wrapper}
            activeDotColor={Colors.primary}
            loop={false}
          >
            {INTROS.map((item) => {
              return <IntroComponent data={item} key={item.id} />;
            })}
          </Swiper>
        </View>
      </SafeAreaView>
    );
  }
}

export default Intro;

const styles = StyleSheet.create({
  wrapper: {},
  txtContinue: {
    textAlign: 'center',
  },
  buttonGroup: {
    flexDirection: 'row',
    justifyContent: 'space-evenly',
  },
  button: {
    width: 145,
    borderRadius: 5,
    height: 45,
  },
  textButton: { fontSize: 18 },
  bottomContainer: {
    flex: 1,
    backgroundColor: Colors.white,
    justifyContent: 'space-around',
  },
  topContainer: {
    flex: 4,
    backgroundColor: Colors.white,
  },
});
