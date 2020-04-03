import React, {Component} from 'react';
import Header from "./components/Client/elements/Header/Header";
import {connect} from 'react-redux';
import {fetchSettingsData} from "./redux/actions";
import Footer from "./components/Client/elements/Footer/Footer";

 class Client extends Component {
     constructor(props) {
         super(props);

     }
    componentDidMount() {
        this.props.fetchSettingsData();
    }
    render() {
        return (
            <>
                <Header/>
                <Footer/>
            </>
        );
    }
}
const mapDispatchToProps = {
    fetchSettingsData
};
export default connect(null,mapDispatchToProps)(Client);

