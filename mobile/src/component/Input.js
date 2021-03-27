  /* eslint-disable prettier/prettier */
/* eslint-disable quotes */
import React, { Component } from "react";
import { StyleSheet, TextInput, Image, View, Dimensions } from "react-native";
const screenWidth = Dimensions.get("screen").width;
const UselessTextInput = (props) => {
  return (
    <TextInput
      {...props} // Inherit any props passed to it; e.g., multiline, numberOfLines below
      editable
      maxLength={200}
      style={styles.input}
    />
  );
}
  export default UselessTextInput;
  const styles = StyleSheet.create({
    input:{
        width: screenWidth - 30,
        borderColor: "#3C574D",
        borderWidth: 2,
        borderRadius: 10,
        fontSize: 16,
    },
  })