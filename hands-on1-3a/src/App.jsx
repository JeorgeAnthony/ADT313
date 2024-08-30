
import './App.css';

import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';


function App(){
  const userInformation = {
firstName: 'Jeorge',
lastName: 'Reyes',
Section: "BSIT3A",
Description:"KAIN TULOG PUYAT PASOK SA SCHOOL KAIN ULIT "

  }

  return (
    <div className="App"> 
    <Name firstName={userInformation.firstName}lastName={userInformation.lastName}/>
    <Section Section={userInformation.Section}/>
    <Description Description={userInformation.Description}/>

    
    </div>
  );
}

export default App;
