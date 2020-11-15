import React from 'react';
import ReactDOM from 'react-dom';
import SnowStorm from 'react-snowstorm';

function Snow() {
        return (
			<div>
				<SnowStorm />
			</div>
		)
}

if (document.getElementById('_snow')) {
    ReactDOM.render(<Snow />, document.getElementById('_snow'));
}
