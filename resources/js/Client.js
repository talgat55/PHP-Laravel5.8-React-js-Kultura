import React, {Component} from 'react';
import {connect} from 'react-redux';
import {fetchSettingsData, fetchMenus} from "./redux/actions";
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import Home from "./components/Client/pages/Home";

class Client extends Component {
    constructor(props) {
        super(props);
    }

    componentDidMount() {
        this.props.fetchSettingsData();
        this.props.fetchMenus()
    }

    render() {
        return (
            <Router>
                <Switch>
                    <Route exact path="/" component={Home}/>
                    <Route exact component={Error}/>
                </Switch>
            </Router>
        );
    }
}

const mapDispatchToProps = {
    fetchSettingsData,
    fetchMenus

};
export default connect(null, mapDispatchToProps)(Client);

