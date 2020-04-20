import React from 'react';
import styled from 'styled-components'
import PropTypes from "prop-types";

const Banner = ({link, url}) => {
    return (
        <div className="container">
            <div className="row">
                <BannerComponent
                    href={link}
                    url={url}
                    target="_blank"
                    className="banner-wrap"
                />
            </div>
        </div>
    )
};

const BannerComponent = styled.a`
  width: 100%;
  display: inline-block;
  background: url(${props => props.url} );
  background-repeat: no-repeat!important;
  background-size: cover!important;
  background-position: center center!important;
  height: 230px;
  margin-bottom: 80px;
`;

Banner.propTypes = {
    link: PropTypes.string,
    url: PropTypes.string,
};

export default Banner;