import React from 'react';
import styled from 'styled-components';
import PropTypes from 'prop-types';
import {
    Link
} from "react-router-dom";

const LinkComponent = ({name, link}) => (
    <LinkWrapper>
        <Link to={link}>{name}</Link>
    </LinkWrapper>
);
const LinkWrapper = styled.div`
    a{
        display: inline-block;
        color: #12a69d;
        border: 1.4px solid #12a69d;

        text-decoration: none;
        padding: 10px 32px;
        font-family: "Neo Sans Pro";
        font-size: 20px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        &:hover{
            color: #fff;
            background-color: #12a69d;
            text-decoration: none;
        }
    }
`;
LinkComponent.propTypes = {
    name: PropTypes.string,
    link: PropTypes.string,
};
export default LinkComponent;
