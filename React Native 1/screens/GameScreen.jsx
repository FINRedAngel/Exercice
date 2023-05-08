import { StyleSheet, View, Text, TextInput } from 'react-native'
import React from 'react'
import { Card, CustomButton, heading } from '../components'
import { rootContext } from '../context/AppContext'

export default function GameScreen() {
    const {onChangeHandler, numberEntered} = useContext(rootContext);
    
    return (
        <View>
        <Heading>Opponent's Guess</Heading>

        <Card>
            <View style={styles.cubeContainer}>
                <RootProvider>
                    <Text style={styles.cubeText}>?</Text>
                </RootProvider>
            
            <View style={styles.inputContainer}></View>
                <CustomButton>+</CustomButton>
                <TextInput 
                    style={style.input}
                    defaultValue="?"
                    autoCapitalize='words'
                    onChangeText={onChangeHandler}
                    value={numberEntered}
                    maxLengh={2}
                />
                <CustomButton>-</CustomButton>
            </View>
                <View style={styles.Container}>
                    <CustomButton>Reset</CustomButton>
                    <Divider marginLeft={20}/>
                    <CustomButton onPress={startGameHandler}>Start</CustomButton>
                </View>
            </Card>
        </View>
    )
}

const styles = StyleSheet.create({
    cubeContainer: {
        width: 100,
        height: 100,
        backgroundColor: '#fff',
        justifyContent: 'center',
        alignItems: 'center',
    },
    cubeText:{
        fontSize: 80,
        textAlign: 'center',
        fontWeight: 'bold',
    },
    inputContainer: {
        flexDirection: 'row',
        marginTop: 24,
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