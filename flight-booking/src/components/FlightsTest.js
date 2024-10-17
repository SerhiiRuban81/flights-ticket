
import React, { useEffect, useState } from 'react';
function FlightsTest() {
    const [flights, setFlights] = useState([]);

    useEffect(() => {
        fetch('/api/flights')  
            .then(response => response.json())
            .then(data => setFlights(data))
            .catch(error => console.error('Error fetching flights:', error));
    }, []);

    return (
        <div>
            <h1>Available Flights</h1>
            <ul>
                {flights.map(flight => (
                    <li key={flight.id}>
                        {flight.flight_number} - {flight.departure_airport_id} to {flight.arrival_airport_id}
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default FlightsTest;