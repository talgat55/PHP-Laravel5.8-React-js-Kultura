import React, {Component} from 'react';
import {connect} from 'react-redux';
import {fetchInitialData} from "./redux/actions";
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import Home from "./components/Client/pages/Home";
import News from "./components/Client/pages/News";
import Header from "./components/Client/elements/Header/Header";
import Footer from "./components/Client/elements/Footer/Footer";
import Afisha from "./components/Client/pages/Afisha";
import Place from "./components/Client/pages/Place";

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
                    <Header/>
                    <Switch>
                        <Route exact path="/" component={Home}/>
                        <Route exact path="/news" component={News}/>
                        <Route exact path="/afisha" component={Afisha}/>
                        <Route exact path="/place" component={Place}/>
                        <Route exact component={Error}/>
                    </Switch>
                    <Footer/>
                </Router>
        );
    }
}

const mapDispatchToProps = {
    fetchInitialData
};
export default connect(null, mapDispatchToProps)(Client);

