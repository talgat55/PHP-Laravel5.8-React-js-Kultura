import {connect} from "react-redux";
import React from 'react';
import styled from 'styled-components';
import FadeIn from "react-fade-in";
import SocLinks from "../SocLinks/SocLinks";
import VisualImpaired from "../VisualImpaired/VisualImpaired";

const Footer = (props) => {
    const {
        logo_url
    } = props.settingsData;

    return (
        <FooterComponent>
            <div className="container">
                <div className="row">
                    <div className="footer__first col-12 col-sm-4">
                        {
                            logo_url &&
                            (
                                <FadeIn>
                                    <a href="/">
                                        <img src={logo_url} alt="Логотип"/>
                                    </a>
                                </FadeIn>
                            )
                        }
                        <SocLinks/>
                        <VisualImpaired/>
                    </div>
                    <div className="footer__second col-12 col-sm-8">

                    </div>
                </div>
            </div>
        </FooterComponent>
    )
};
const FooterComponent = styled.footer`
    background: #303030;
    color: rgba(255, 255, 255, 0.65);
    font-size: 14px;
    padding: 35px 5px 30px;
    .link-to-social{
        justify-content: flex-start;
        margin: 10px 0 10px;
    }
`;

const mapStateToProps = state => {
    return {
        settingsData: state.settings.data
    }
};
export default connect(mapStateToProps, null)(Footer);