import logo from './logo.svg';
import './App.css';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import FlightsTest from './components/FlightsTest';

function App() {
  return (
    <Router>
      <div className="App">
        <Routes>
          <Route path="/flights" element={<FlightsTest />} />
        </Routes>
      </div>
    </Router>
  );
}


export default App;
