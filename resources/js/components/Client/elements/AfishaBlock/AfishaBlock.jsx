import React from 'react';
import Slider from "react-slick";
import styled from 'styled-components';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel/slick/slick.css'
import PropTypes from "prop-types";
import Slide from "./Slide";
import Subtitle from "../Title/Subtitle";
import arrowRight from '../../../../static/afisha-arr.png';
import arrowLeft from '../../../../static/afisha-arr-mirror.png';
import Link from "../Link/Link";
const settings = {
    dots: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
};
const AfishaBlock = ({sliders}) => {
    let SliderInstance;
    const next = (e) => {
        e.preventDefault();
        SliderInstance.slickNext();
    };
    const prev = (e) => {
        e.preventDefault();
        SliderInstance.slickPrev();
    };

    return (
        <AfishaBlockComponent>
            <div className="container">
                <div className="row">
                    <Subtitle
                        title="В ЦЕНТРЕ ВНИМАНИЯ"
                    />
                    <div className="slider-wrapper">
                        <Slider  ref={e => SliderInstance = e}   {...settings}>
                            {
                                sliders.map(item => (
                                    <Slide
                                        key={item.id}
                                        id={item.id}
                                        name={item.name}
                                        image={item.image}
                                        date_time_launch={item.date_time_launch}
                                    />
                                ))
                            }
                        </Slider>
                        <div className="afisha-sliders__arrows">
                            <div className="container">
                                <div className="row">
                                    <a href="#" className="button  left-arrow" onClick={prev}>
                                        <img src={arrowLeft} alt="Иконка"/>
                                    </a>
                                    <a href="#" className="button  right-arrow" onClick={next}>
                                        <img src={arrowRight} alt="Иконка"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div className="afisha__link-bottom-wrapper">
                            <Link
                                name="Вся афиша"
                                link="/afisha"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </AfishaBlockComponent>
    );
};
const AfishaBlockComponent = styled.section`
    padding: 55px 0;
    .slider-wrapper{
      width: 100%;
      position: relative;
    }
    .afisha-sliders__arrows{
        .button{
          position: absolute;
          top: 150px;
          transition: all .3s;
          &:hover{
            opacity: .5;
          }
        }
        
        .right-arrow{
            right: -40px;
        }
        .left-arrow{
            left: -40px;
        }
    }
    .afisha__link-bottom-wrapper{
        display: table;
        margin: 40px auto;
    }
`;
AfishaBlock.propTypes = {
    sliders: PropTypes.array
};


export default AfishaBlock;