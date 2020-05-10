import React from 'react';
import styled from 'styled-components';
import PropTypes from 'prop-types';
import {Link} from 'react-router-dom';

const ItemPlace = ({name, image,slug}) => {

    return (
        <PlaceItemComponent className=" col-12 col-md-3">
            <Link to={slug}>
                <div className="place-item__image">
                    <img src={image} alt="Image"/>
                </div>
                <h3 className="place-item__title">
                    {name}
                </h3>
            </Link>
        </PlaceItemComponent>
    )
};

ItemPlace.propTypes = {
    name: PropTypes.string.isRequired,
    image: PropTypes.string.isRequired,
};
const PlaceItemComponent = styled.li`
  list-style: none;
  .place-item__image img{
    max-width: 100%;
  }
  a{
    display: inline-block;
    margin-bottom: 30px;
  }
  .place-item__title{
    font-family: "Neo Sans Pro";
    font-weight: 400;
    color: #20acaf;
    font-size: 18px;
    text-align: center;
    line-height: 22px;
    margin: 20px 0 0;
  }


`;
export default ItemPlace;
