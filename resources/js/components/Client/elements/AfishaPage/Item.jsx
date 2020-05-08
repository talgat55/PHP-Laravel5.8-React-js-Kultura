import React from 'react';
import styled from 'styled-components';
import PropTypes from 'prop-types';
import moment from "moment";
import {Link} from 'react-router-dom';
const AfishaItem = ({name, image, date}) => {

    return (
        <AfishaItemComponent className="col-12 col-sm-3">
            <Link to="#" style={{backgroundImage: `url(${image})`}}>
                <div className="afisha-item__date">
                    {moment(date).format('D MMMM')}
                </div>
                <h3 className="afisha-item__title">
                    {name}
                </h3>
            </Link>
        </AfishaItemComponent>
    )
};
const AfishaItemComponent = styled.li`
  a{
    display: inline-block;
    width: 100%;
    height: 300px;
    text-decoration: none;
    color: #fff;
    background-size: cover!important;
    padding: 13px;
    margin-bottom: 30px;
    position: relative;
    .afisha-item__date{
      font-size: 18px;
      color: #fff;
      font-family: 'Open Sans', sans-serif;
      font-weight: bolder;
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px;
    }
    .afisha-item__title{
        font-family: "Neo Sans Pro";
        font-size: 14px;
        color: #fff;
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px;
    }
  }
`;
AfishaItem.propTypes = {
    name: PropTypes.string.isRequired,
    image: PropTypes.string.isRequired,
    date: PropTypes.string.isRequired,
};
export default AfishaItem;
