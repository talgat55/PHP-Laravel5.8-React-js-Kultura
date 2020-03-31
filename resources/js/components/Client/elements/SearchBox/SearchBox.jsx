import React from 'react';
import styled from 'styled-components';
import iconSearch from '../../../../static/search.png';
export default () => {
    return (
        <SearchBoxComponent className="search-box">
            <form>
                <input
                    type="text"
                    name="search"
                    placeholder="Поиск"
                    className="input-field"
                />
                <button type="submit">
                    <img src={iconSearch} alt="Иконка"/>
                </button>
            </form>
        </SearchBoxComponent>
    )
};
const SearchBoxComponent = styled.div`
    form{
        position: relative;
        
        .input-field{
            padding: 9px 16px;
            border-radius: 19px;
            outline: none;
            font-size: 16px;
            line-height: 19px;
            width: 100%;
            box-sizing: border-box;
            margin: 0;
            border: 2px solid #26737e;
        }
        button{
            background: transparent;
            border: none;
            position: absolute;
            right: 2px;
            padding: 8px 15px 8px 8px;
        }
    }


`;