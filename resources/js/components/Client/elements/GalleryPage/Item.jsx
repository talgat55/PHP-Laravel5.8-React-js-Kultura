import React from 'react';
import styled from 'styled-components';
import PropTypes from "prop-types";
import {Link} from 'react-router-dom';
const Item = ({name, image, slug}) =>{
    const readyImage = JSON.parse(image);
    return  (

        <GalleryItemComponent className="news-item col-12 col-sm-3">

            <Link to={`/gallery/${slug}`}>

                <div className="news-item__image">
                    <img src={readyImage[0]} alt="Image"/>
                </div>
                <h3 className="news-item__title">
                    {name}
                </h3>
            </Link>
        </GalleryItemComponent>
    )
};
Item.propTypes = {
    name: PropTypes.string,
    image: PropTypes.string,
    slug: PropTypes.string,
};
const GalleryItemComponent = styled.li`
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
