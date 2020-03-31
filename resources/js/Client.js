import React, {Component} from 'react';
import Header from "./components/Client/elements/Header/Header";
import {connect} from 'react-redux';
import {fetchSettingsData} from "./redux/actions";

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
            </>
        );
    }
}
const mapDispatchToProps = {
    fetchSettingsData
};
export default connect(null,mapDispatchToProps)(Client);

