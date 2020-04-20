import React from 'react';
import styled from 'styled-components';
import {connect} from 'react-redux';
import {Link} from "react-router-dom";
import FadeIn from "react-fade-in";
import PropTypes from 'prop-types';
const TopNavigation = ({navigation}) => {

    return (
        <TopNavComponent>
            {
                navigation && (
                    <FadeIn>
                        <ul className="top-navigation justify-content-between">
                            {
                                navigation.menu.map(item => (
                                    <li key={item.id}>
                                        <Link to={item.link}>{item.name}</Link>
                                    </li>
                                ))
                            }
                        </ul>
                    </FadeIn>
                )
            }
        </TopNavComponent>
    );

};
const TopNavComponent = styled.nav`
  .top-navigation{
    padding: 0;
    margin: 0;
    display: flex;
    li{
      list-style: none;
      a{
        font-family: "Neo Sans Pro";
        font-weight: normal;
        font-size: 18px;
        color: #1c172a;
        display: inline-block;
        text-decoration: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        padding: 12.5px 0;
        line-height: 25px;
        border-bottom: 3px solid transparent;
        &:hover {
            border-bottom: 3px solid #12a69d;
            color: #12a69d;
        }
      }
    }
  }
`;
const mapStateToProps = state => {
    return {
        navigation: state.menu
    }
};
TopNavigation.propTypes = {
    navigation: PropTypes.object
};
export default connect(mapStateToProps, null)(TopNavigation);