import React from 'react';
import styled from 'styled-components';
import iconEye from '../../../../static/eye.png';

export default () => {
    return (
        <BVIComponent href="#" className="bvi-class">
            <div className="bvi-class-wrapper">
                <img src={iconEye} alt="Иконка"/>
                <div className="bvi-class__text">
                    ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ
                </div>
            </div>
        </BVIComponent>
    )
}
const BVIComponent = styled.a`
  display: inline-block;
  transition: all .3s;
  &:hover{
    opacity: .6;
    text-decoration: none;
  }
  .bvi-class-wrapper{
    display: flex;
    align-items: center;
    img{
      height: 13px;
    }
  }
  img{
    margin-right: 5px;
  } 
  .bvi-class__text{
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    font-size: 14px;
    line-height: 20px;
    margin-left: 8px;
    color: #fff;
    text-transform: uppercase;
    border-bottom: 1.2px solid #fff;
    cursor: pointer;
  }
  
 


`;