import React from 'react';
import styled from 'styled-components';
const Link = ({name,link}) => (
    <LinkComponent>
        <a href={link}>{name}</a>
    </LinkComponent>
);
const LinkComponent = styled.div`
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
export default Link;