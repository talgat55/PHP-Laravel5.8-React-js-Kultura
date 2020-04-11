import React from 'react';
import styled from 'styled-components';
import PropTypes from "prop-types";

const Subtitle = ({title}) => (
    <SubtitleComponent>
        {title}
    </SubtitleComponent>
);
const SubtitleComponent = styled.h2`
  margin: 0;
  text-align: center;
  display: block;
  width: 100%;
  font-size: 26px;
  line-height: 26px;
  font-family: "Neo Sans Pro";
  text-transform: uppercase;
  color: #000;
  font-weight: 500;
   &:after{
        content: "";
        width: 208px;
        display: table;
        margin: 20px auto 40px auto;
        height: 1px;
        background-color: #12a69d;
   }
`;
Subtitle.propTypes = {
    title: PropTypes.string
};


export default Subtitle;