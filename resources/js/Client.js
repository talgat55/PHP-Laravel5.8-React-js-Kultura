import React, {Component} from 'react';
import {connect} from 'react-redux';
import {fetchInitialData} from "./redux/actions";
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import Home from "./components/Client/pages/Home";
import News from "./components/Client/pages/News";

class Client extends Component {

    constructor(props) {
        super(props);
    }

    componentDidMount() {
        this.props.fetchInitialData();
    }

    render() {
        return (
            <Router>
                <Switch>
                    <Route exact path="/" component={Home}/>
                    <Route exact path="/news" component={News}/>
                    <Route exact component={Error}/>
                </Switch>
            </Router>
        );
    }
}

const mapDispatchToProps = {
    fetchInitialData
};
export default connect(null, mapDispatchToProps)(Client);

