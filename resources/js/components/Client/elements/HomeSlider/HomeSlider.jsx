import React from 'react';
import Slider from "react-slick";
import PropTypes from 'prop-types';
import Slide from "./Slide";

const settings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1
};
const HomeSlider = ({sliders}) => {

    return (
        <Slider {...settings}>
            {
                sliders.map(item =>(
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
    );
};
HomeSlider.propTypes = {
    sliders: PropTypes.array
};

export default HomeSlider;