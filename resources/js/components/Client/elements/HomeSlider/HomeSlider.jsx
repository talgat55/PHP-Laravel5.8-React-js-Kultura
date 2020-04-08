import React from 'react';
import Slider from "react-slick";
import PropTypes from 'prop-types';
import styled from 'styled-components';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel/slick/slick.css'
import Slide from "./Slide";
import arrowRight from '../../../../static/slider-arr.png';
import arrowLeft from '../../../../static/slider-arr-mirror.png';

const settings = {
    dots: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
};
const HomeSlider = ({sliders}) => {
    let SliderInstance;
    const next = () => {
        SliderInstance.slickNext();
    };
    const prev = () => {
        SliderInstance.slickPrev();
    };

    return (
        <HomeSliderComponent>

            <Slider ref={e => SliderInstance = e} {...settings}>
                {
                    sliders.map(item => (
                        <Slide
                            key={item.id}
                            name={item.name}
                            url={item.url}
                            link={item.link}
                            text={item.text}
                            name_place={item.name_place}
                            date={item.date}
                        />
                    ))
                }
            </Slider>
            <div className="home-sliders__arrows">
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
        </HomeSliderComponent>
    );
};
const HomeSliderComponent = styled.div`
  width: 100%;
  height: 500px;
  position: relative;

   .home-sliders__arrows{
      position: absolute;
      top: 0;
      width: 100%;
      .container{
        position: relative;
      }
      .button{
        position: absolute;
        right: 0;
        top: 250px;
        transform: translateY(-50%);
        transition: all .3s;
        &:hover{
            opacity: .5;    
        }
      }
      .right-arrow{
        right: -50px;
      }
      .left-arrow{
        left: -50px;
      }
        
   }
   

`;
HomeSlider.propTypes = {
    sliders: PropTypes.array
};

export default HomeSlider;