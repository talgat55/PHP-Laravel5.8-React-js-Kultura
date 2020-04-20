import React from 'react';
import styled from 'styled-components';
import {connect} from 'react-redux';
import {Link} from "react-router-dom";
import FadeIn from "react-fade-in";
import PropTypes from "prop-types";

const BottomNavigation = ({navigation}) => {

    return (
        <BottomNavComponent>
            {
                navigation && (
                    <FadeIn>
                        <ul className="bottom-navigation  ">
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
        </BottomNavComponent>
    );

};
const BottomNavComponent = styled.div`
  .bottom-navigation{
    padding: 0;
    margin: 0; 
    column-count: 3;
    li{
      list-style: none;
      a{
          font-family: "Neo Sans Pro"; 
          display: inline-block;
          text-decoration: none;
          color: #fff;
          font-size: 15px;
          line-height: 26px; 
          &:hover{
            text-decoration: underline; 
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
BottomNavigation.propTypes = {
    navigation: PropTypes.object
};
export default connect(mapStateToProps, null)(BottomNavigation);