import React from 'react';
import Title from "../Title/Title";
import styled from 'styled-components';
import PropTypes from 'prop-types';
import AfishaItem from './Item';
const AfishaPage = ({data}) => {

    return (
        <AfishaPageComponent>
            <div className="container">
                <div className="row">
                    <Title
                        title="Афиша"
                    />
                </div>
                <div className="row">
                    <ul className="afisha-list row">
                        {
                            data.map((item, index) => (
                                <AfishaItem
                                    key={index}
                                    name={item.name}
                                    image={item.image}
                                    date={item.date_time_launch}
                                />
                            ))
                        }
                    </ul>
                </div>
            </div>
        </AfishaPageComponent>
    )
};
AfishaPage.propTypes = {
    data: PropTypes.object
};
const AfishaPageComponent = styled.section`
  margini: 40px 0;
  .afisha-list{
    width: 100%;
    margin: 0;
    padding: 0;
    li{
      list-style: none;
    }
    
  }

`;
export default AfishaPage;