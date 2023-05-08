const { createContext, useState } = require("react");

export const rootContext = createContext();

const [Provider] = rootContext;

export default function RootProvider({children}){
    const random = Math.trunc(Math.random()*20 + 1);
    const [secretNumber, setSecretNumber] = useState(random);
    const [textEntered, settextEntered] = useState('');
    const value = {secretNumber,numberEntered, onChangeHandler};
    const onChangeHandler = (numberFromInput) => setNumberEntered(numberFromInput);
    return (<Provider value={value}>{children}</Provider>);
}