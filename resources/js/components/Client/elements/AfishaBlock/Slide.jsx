import React from 'react';
import styled from 'styled-components';
import PropTypes from "prop-types";
import {
    Link,
} from "react-router-dom";
import moment from 'moment';
moment.locale('ru');
const Slide = ({name, image, ...props}) => {
    return (
        <SlideComponent >
            <div className="afisha-slide">
                <div className="afisha-slide__date">
                    {moment(props.date_time_launch).format('D MMMM')}
                </div>
                <div className="afisha-slide__image-block">
                    <Link to={`/afisha/${props.slug}`} className="afisha-slide__link">
                        <div className="afisha-slide__image" style={{backgroundImage: `url(${image})` }}></div>
                        <div className="afisha-slide__overlay"/>
                        <div className="afisha-slide__title">
                            {name}
                        </div>
                    </Link>
                </div>
            </div>
        </SlideComponent>
    )
};
Slide.propTypes = {
    name: PropTypes.string,
    image: PropTypes.string,
    props: PropTypes.oneOfType([
        PropTypes.string,
        PropTypes.number,
    ]),

};
const SlideComponent = styled.div`
  .afisha-slide{
    position: relative;
    margin: 42px 10px 10px 10px;
      &__link{
        display: inline-block;
        width: 100%;
        height: 100%;
        position: relative;
        &:hover .afisha-slide__overlay,
        &:hover .afisha-slide__title{
          opacity: 1;
        }
      }
      &__date{
        background: #fff;
        box-sizing: border-box;
        z-index: 9;
        white-space: nowrap;
        padding: 3px 26px;
        position: absolute;
        top: -21px;
        box-shadow: 0px -8px 18px 0px #e0e0e0;
        left: 50%;
        border-radius: 42px;
        font-family: "Neo Sans Pro";
        font-size: 23px;
        color: #12a69d;
        transform: translateX(-50%);
      }
      &__title{
        position: absolute;
        z-index: 3;
        top: 50%;
        left: 0;
        width: 100%;
        padding: 0 10px;
        text-align: center;
        font-family: "Neo Sans Pro";
        font-size: 25px;
        font-weight: 400;
        color: #fff;
         transition: all .3s;
         transform: translateY(-50%);
         opacity: 0;
      }
      &__overlay{
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.4);
        transition: all .3s;
        opacity: 0;
      }
      &__image-block{
        width: 260px;
        height: 250px;
        margin: 0 auto;
      }
      &__image{
        background-repeat: no-repeat!important;
        background-position: center center!important;
        background-size: cover!important;
        height: 100%;
      }

  }

`;


export default Slide;
