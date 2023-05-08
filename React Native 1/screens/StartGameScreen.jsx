import { StyleSheet, Text, View, TextInput } from 'react-native'
import React from 'react'
import { CustomButton, Heading, Card, Divider } from '../components'
import { rootContext } from '../context/AppContext'

export default function StartGameScreen() {
  const{secretNumber, numberEntered, onChangeHandler} = useContext(rootContext);

  function startGameHandler(){
    if(numberEntered > 20 || numberEntered == 0){
      return Alert.alert('erreur', 'Please provide a number between 1 and 20'),[{
        text: 'Oups...',
        // onPress:() => console.log('Hello'),
        style:'destuctive'
      }];
    }
  }

  if(secretNumber == number(numberEntered)){
    setScreen(GameOverScreen);
  }
  else{
    setScreen(GameScreen);
  }

  if(NumberEntered && screen){return screen;}
  return <GameScreen/>;
  
  return (
    <View>
      <Heading>Guess My Number</Heading>
      <Card>
        <Text style={styles.intro}>Enter a number between 1 and 20</Text>
        <TextInput style={styles.Input} keyboardType='numeric' onChangeTexte={onChangeHandler} maxLength={2} defaultValue='?'/>
        <View style={styles.buttonContainer}>
          <CustomButton>Reset</CustomButton>
          <CustomButton onPress={startGameHandler}>Start</CustomButton>
          <Divider marginLeft={20}/>
        </View>
      </Card>
    </View>
  )
}

const styles = StyleSheet.create({
  buttonContainer:{
    flexDirection: 'row',
  },
  intro: {
    fontSize: 16,
    color: 'red',
    fontWeight: 'bold',
  },
  Input: {
    width: 90,
    paddingVertical: 8,
    marginBottom: 12,
    fontSize: 20,
    color: '#fff',
    textAlign: 'center',
    borderBottomWidth: 1,
    borderBottomColor: '#fff',
  }
})