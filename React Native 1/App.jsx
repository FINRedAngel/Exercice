import { LinearGradient } from 'expo-linear-gradient';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, ImageBackground} from 'react-native';
import RootProvider, { rootContext } from './context/AppContext';
import { StartGameScreen } from './screens';

const background = require('./assets/background.jpeg');

export default function App() {
  const data = useContext(rootContext);
  return (
    <RootProvider>
      <ImageBackground source={background} resizeMode="cover" style={styles.imageBackground}>
        <LinearGradient style={styles.container} colors={['rgba(255,255,255,0.5)', 'rgba(200,200,255,0.5)']}>
          <SafeAreaView>
            <RootProvider>
              <StartGameScreen/>
            </RootProvider>
          </SafeAreaView>
          <StatusBar style="auto"/>
        </LinearGradient>
      </ImageBackground>
    </RootProvider>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    paddingTop: 60,
  },
  imageBackground: {
    flex: 1,
  },
});