import React from 'react';
import styled from 'styled-components';
const Slide = ({name, url, ...props}) => {
    return (
        <SlideComponent className="slide-home">
            <div className="d-lg-flex">
                <div className="slide-home__first">
                    <div className="slide-home__title">

                    </div>

                </div>
                <div className="slide-home__second">

                </div>

            </div>
        </SlideComponent>
    )
};
const SlideComponent = styled`
  width: 100%;
  height: 590px;
  

`;
export default Slide;