import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Example extends Component {
    render() {
        return (
            <div>
                this is react
            </div>
        );
    }
}

if(document.getElementById('example')){
    ReactDOM.render(<Example/>, document.getElementById('example'));
}

export default Example;