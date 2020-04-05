import {connect} from "react-redux";
import React from 'react';
import styled from 'styled-components';
import FadeIn from "react-fade-in";
import SocLinks from "../SocLinks/SocLinks";
import VisualImpaired from "../VisualImpaired/VisualImpaired";
import BottomNavigation from "../Navigation/Bottom";

const Footer = (props) => {
    const {
        logo_url
    } = props.settingsData;

    return (
        <FooterComponent>
            <div className="container">
                <div className="row">
                    <div className="footer__first col-12 col-sm-5">
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
                    <div className="footer__second col-12 col-sm-7">
                        <BottomNavigation/>
                        <a className="bottom-copyright" target="_blank" title="Перейти на сайт разработчика" href="http://asmart-group.ru/">Сайт создан в IT-Company <span>ASMART</span></a>
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
    .bottom-copyright{
          color: rgba(255, 255, 255, 0.8);
          width: 100%;
          text-align: right;
          display: block;
          margin-top: 20px;
          span{
            color: #9aca42;
          }
          &:hover{
            text-decoraiton: underline;
          }
    }
`;

const mapStateToProps = state => {
    return {
        settingsData: state.settings.data
    }
};
export default connect(mapStateToProps, null)(Footer);