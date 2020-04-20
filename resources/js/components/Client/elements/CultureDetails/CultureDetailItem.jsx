import React from 'react';
import styled from 'styled-components';
import PropTypes from "prop-types";
const CultureDetailItem =  ({name,anons,image}) => {

    return (
        <CultureDetailsItemComponent className="culture-details__item" >
            <a href="#" style={{ backgroundImage: `url(${image})`}}>
                <div className="overlay-culture-detail"/>
                <div className="culture-details__content-item">
                    <div className="culture-details__title-item">
                        {name}
                    </div>
                    <div className="culture-details__anons-item">
                        {anons}
                    </div>
                </div>
            </a>
        </CultureDetailsItemComponent>
    );
};
CultureDetailItem.propTypes = {
    name: PropTypes.string,
    anons: PropTypes.string,
    image: PropTypes.string
};

const CultureDetailsItemComponent = styled.li`
  list-style: none; 
  padding: 15px;
  a{
    height: 100%;
    width: 100%;
    background-size: cover!important;
    background-repeat: no-repeat!important;
    display: inline-block;
    text-decoration: none;
    color: #fff;
    position: relative;
    
    .culture-details__content-item{
      position: absolute;
      z-index: 3;
      bottom: 30px;
      left: 30px; 
        .culture-details__title-item{
            font-family: "Neo Sans Pro";
            font-size: 25px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .culture-details__anons-item{
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            color: #fff;
        } 
    } 
  }
  .overlay-culture-detail{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    background: rgba(0, 0, 0, .32);
  }
`;


export default  CultureDetailItem;