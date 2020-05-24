import React from 'react';
import styled from 'styled-components';
import PropTypes from "prop-types";
import moment from 'moment';
import {Link} from 'react-router-dom';
moment.locale('ru');
const Item = ({name, image, slug, anons, date}) => (
    <NewsItemComponent className="news-item col-12 col-sm-3">
        <Link to={`/culture-details/${slug}`}>
            <div className="news-item__date">
                {moment(date).format('D MMMM')}
            </div>
            <div className="news-item__image">
                <img src={image} alt="Image"/>
            </div>
            <h3 className="news-item__title">
                {name}
            </h3>
            <div className="news-item__anons">
                {anons}
            </div>
        </Link>
    </NewsItemComponent>
);
Item.propTypes = {
    name: PropTypes.string,
    image: PropTypes.string,
    slug: PropTypes.string,
    anons: PropTypes.string,
    date: PropTypes.string,
};
const NewsItemComponent = styled.li`
  a{
    width: 100%;
    display: inline-block;
    text-decoration: none;
    color: #000;
    padding: 10px;
    transition: all .3s;
    &:hover{
        -webkit-box-shadow: 0 40px 50px rgba(0, 0, 0, 0.4);
        -moz-box-shadow: 0 40px 50px rgba(0, 0, 0, 0.4);
        box-shadow: 0 40px 50px rgba(0, 0, 0, 0.4);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
    }
    .news-item__date{
        font-size: 18px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 800;
        margin-bottom: 20px;
        color: #12a69d;
    }
    .news-item__image img {
      max-width: 100%;
    }
    .news-item__image{
      margin-bottom: 25px
    }
    .news-item__title{
        font-size: 18px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        color: #000;
        min-height: 52px;
        margin: 0 0 20px;
    }
    .news-item__anons{
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;
    }

  }



`;


export default Item;
