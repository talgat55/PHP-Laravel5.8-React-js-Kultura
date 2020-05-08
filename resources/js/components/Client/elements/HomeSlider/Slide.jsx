import React from 'react';
import styled from 'styled-components';
import moment from 'moment';
import {Link} from 'react-router-dom';
import PropTypes from 'prop-types';
moment.locale('ru');

const Slide = ({name, url, ...props}) => {
    return (
        <SlideComponent className="slide-home"  style={{backgroundImage: `url(${url})` }} >
            <div className="overlay-block-slider" />
            <div className="container">
                <div className="row">
                    <div className="d-lg-flex w-100">
                        <div className="slide-home__first col-12 col-sm-6">
                            <div className="slide-home__title">
                                {name}
                            </div>
                            <div className="slide-home__text">
                                {props?.text}
                            </div>
                            {
                                props?.link &&(
                                    <Link className="link__slide-home" to={ props?.link} target="_blank">
                                        Узанть подробнее
                                    </Link>
                                )
                            }
                        </div>
                        <div className="slide-home__second  col-12 col-sm-6">
                            <div className="text-block">
                                <div className="slide-home__date">
                                    {
                                        props?.date  &&  (
                                            <div className="slide-home__date_month">{ moment(props.date).format('D MMMM')  }</div>

                                        )
                                    }

                                </div>
                                <div className="slide-home__place-second">
                                    {
                                        props?.name_place
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </SlideComponent>
    )
};
const SlideComponent = styled.div`
  width: 100%;
  height: 590px;
  background-size: cover;
  background-position: center center!important;
  display: flex;
  align-items: center;
  position: relative;
  .overlay-block-slider{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 6;
    background: rgba(0, 0, 0, .3);
  }
  .link__slide-home{
    color: #fff;
    border: 1.4px solid #12a69d;
    display: table;
    background: #12a69d;
    margin: 40px 0 0;
    text-decoration: none;
    padding: 10px 32px;
    font-family: "Neo Sans Pro";
    font-size: 20px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
    &:hover{
          color: #12a69d;
          background: transparent;
    }
  }
  .slide-home__title{
    font-size: 40px;
    line-height: 49px;
    color: #fff;
    font-family: "Neo Sans Pro";
    font-weight: 500;
  }
  .slide-home__text{
    font-size: 20px;
    color: #fff;
    width: 82%;
    text-align: left;
    font-family: 'Open Sans', sans-serif;
    padding: 43px 0;
  }
  .container{
    position: relative;
    z-index: 10;
  }
  .slide-home__second .text-block{
      border-bottom: 6px solid #12a69d;
      border-top: 6px solid #12a69d;
      border-right: 6px solid #12a69d;
      width: 55%;
      display: flex;
      align-items: center;
      margin: 0 0 0 auto;
      min-height: 200px;
      position: relative;
  }
  .slide-home__second .text-block:after{
    content: "";
    height: 12px;
    position: absolute;
    bottom: -1px;
    display: block;
    border-left: 6px solid #12a69d;
  }
  .slide-home__second .text-block:before{
    content: "";
    height: 12px;
    position: absolute;
    top: -1px;
    display: block;
    border-left: 6px solid #12a69d;
  }
  .slide-home__place-second{
    font-family: "Neo Sans Pro";
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    text-align: center;
    padding-left: 106px;
    text-transform: uppercase;
    padding-right: 10px;
  }
  .slide-home__date{
    font-family: "Neo Sans Pro";
    font-weight: bold;
    font-size: 70px;
    line-height: 70px;
    color: #fff;
    text-align: center;
    position: absolute;
    right: 199px;
    max-width: 200px;
    min-width: 200px;
  }
`;
Slide.propTypes = {
    name: PropTypes.string,
    url: PropTypes.string,
    props: PropTypes.oneOfType([
        PropTypes.string,
        PropTypes.number,
    ]),
};
export default Slide;
