import React from 'react';
import styled from 'styled-components';
import CultureDetailItem from "./CultureDetailItem";
import Subtitle from "../Title/Subtitle";
import Link from "../Link/Link";

export default ({data}) =>{
    return  (
        <CultureDetailComponent>
            <div className="container">
                <div className="row">
                    <Subtitle
                        title="Культура в деталях"
                    />
                </div>
                <div className="row">
                    <ul className="culture-details__list">
                        {
                            data.map((item,index) =>(
                                <CultureDetailItem
                                    key={index}
                                    name={item.name}
                                    anons={item.anons}
                                    image={item.image}
                                />
                            ))
                        }
                    </ul>
                </div>
                <div className="row  justify-content-center mt-4">
                    <Link
                        name="Все материалы"
                        link="/culture-details"
                    />
                </div>
            </div>
        </CultureDetailComponent>
    )
};

const CultureDetailComponent = styled.section`
  display: flex; 
  margin-bottom: 80px;
 .culture-details__list{
    margin: 0 -15px;
    padding: 0;
    min-width: 1170px; 
  }
  .culture-details__list li {
    width: 60%;
    height: 300px;
    float: left;
    transition: all .3s;
    &:hover{
      opacity: .5;
    }
  } 
  .culture-details__list li:first-child{
    height: 600px;
    width: 40% !important;
  }
 
`;

