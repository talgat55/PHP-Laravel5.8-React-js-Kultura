import React from 'react';
import styled from 'styled-components';
import {connect} from 'react-redux';
import FadeIn from "react-fade-in";
import SearchBox from "../SearchBox/SearchBox";
import VisualImpaired from "../VisualImpaired/VisualImpaired";
import SocLinks from "../SocLinks/SocLinks";
import TopNav from "../TopNav/TopNav";
import TopNavigation from "../Navigation/Top";
import PropTypes from "prop-types";
const Header = (props) => {

    const {
        logo_url
    } = props.settingsData;
    return (
        <HeaderComponent>
            <div className="header__top">
                <div className="container">

                    <div className="row">
                        <div className="header__logo-top col-12 col-md-6 col-lg-4">
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
                        </div>
                        <div className="header__search-top col-12 col-md-6 col-lg-4">
                            <SearchBox/>
                        </div>
                        <div className="header__add-block-top col-12 col-md-6 col-lg-4">
                            <VisualImpaired/>
                            <SocLinks/>
                            <TopNav/>
                        </div>

                    </div>
                </div>

            </div>
            <div className="header__bottom">
                <div className="container">
                    <TopNavigation/>
                </div>
            </div>
        </HeaderComponent>
    );

};
const HeaderComponent = styled.header`
    background-image: -webkit-gradient(linear,0 50%,100% 50%,color-stop(0,#1f1b2f),color-stop(.395,#252d45),color-stop(.667,#285a6c),color-stop(.998,#24838a));
    background-image: -webkit-linear-gradient(0deg,#1f1b2f 0,#252d45 39.5%,#285a6c 66.7%,#24838a 99.8%);
    background-image: linear-gradient(90deg,#1f1b2f 0,#252d45 39.5%,#285a6c 66.7%,#24838a 99.8%);
    
    .header{
      &__top {
        padding: 19px 0;
          .row{
            align-items: center;
          } 
      }
      &__bottom{
        background: #fff;
      }
      &__add-block-top{
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
        text-align: right;
      }
    }
     
    
    
`;
Header.propTypes = {
    props: PropTypes.shape({
        logo_url: PropTypes.string,
    }),
};
const mapStateToProps = state => {
    return {
        settingsData: state.settings.data
    }
};

export default connect(mapStateToProps, null)(Header);