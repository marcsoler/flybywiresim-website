import React from 'react';
import ReactDOM from 'react-dom';
import Map from '@flybywiresim/map';

function LiveMap() {
    return (
        <div>
            <Map currentFlight="" disableSearch={true} disableInfo={true} />
        </div>
    )
}

ReactDOM.render(<LiveMap />, document.getElementById('livemap'));