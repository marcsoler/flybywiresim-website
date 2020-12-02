import React from 'react';
import ReactDOM from 'react-dom';
import ReactCountTo from '@sevenschan/react-count-to'

function CountTo(props) {
    return (
        <div>
            <ReactCountTo startVal={0} endVal={Number(props.number)} duration={4000} autoplay={true} suffix={"+"}/>
        </div>
    )
}

const download_count = document.getElementById('download-count');
const contributor_count = document.getElementById('contributor-count');
const commit_count = document.getElementById('commit-count');
const flight_count = document.getElementById('flight-count');

ReactDOM.render(<CountTo number={download_count.getAttribute('data-number')} />, download_count);
ReactDOM.render(<CountTo number={contributor_count.getAttribute('data-number')} />, contributor_count);
ReactDOM.render(<CountTo number={commit_count.getAttribute('data-number')} />, commit_count);
ReactDOM.render(<CountTo number={flight_count.getAttribute('data-number')} />, flight_count);

