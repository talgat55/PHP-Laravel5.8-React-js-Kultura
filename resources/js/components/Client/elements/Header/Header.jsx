import React from 'react';
import styled from 'styled-components';
import {connect} from 'react-redux';
import SearchBox from "../SearchBox/SearchBox";
import VisualImpaired from "../VisualImpaired/VisualImpaired";
import SocLinks from "../SocLinks/SocLinks";

const Header = (props) => {

    const {
        logo_url
    } = props.settingsData;
    return (
        <HeaderComponent>
            <div className="container">
                <div className="header__top">
                    <div className="row">
                        <div className="header__logo-top col-12 col-md-6 col-lg-4">
                            {
                                logo_url &&
                                (
                                    <img src={logo_url} alt="Логотип"/>
                                )
                            }
                        </div>
                        <div  className="header__search-top col-12 col-md-6 col-lg-4">
                            <SearchBox/>
                        </div>
                        <div  className="header__add-block-top col-12 col-md-6 col-lg-4">
                            <VisualImpaired/>
                            <SocLinks/>
                        </div>

                    </div>
                </div>
            </div>
        </HeaderComponent>
    );

};
const HeaderComponent = styled.header`
    background-image: -webkit-gradient(linear,0 50%,100% 50%,color-stop(0,#1f1b2f),color-stop(.395,#252d45),color-stop(.667,#285a6c),color-stop(.998,#24838a));
    background-image: -webkit-linear-gradient(0deg,#1f1b2f 0,#252d45 39.5%,#285a6c 66.7%,#24838a 99.8%);
    background-image: linear-gradient(90deg,#1f1b2f 0,#252d45 39.5%,#285a6c 66.7%,#24838a 99.8%);
    padding: 19px 0;
    .header{
      &__top {
          .row{
            align-items: center;
          } 
      }
      &__add-block-top{
        display: flex;
        justify-content: flex-end;
      }
    }
     
    
    
`;

const mapStateToProps = state => {
    return {
        settingsData: state.settings.data
    }
};

export default connect(mapStateToProps, null)(Header);