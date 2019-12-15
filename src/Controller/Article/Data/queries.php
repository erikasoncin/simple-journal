<?php

define ("GET_ARTICLES_BY_AUTHOR", "SELECT * from Article where Author = :0;");

define ("GET_LAST_THREE_ARTICLES", "SELECT a.Id, a.Title, a.Subheading, a.Body, a.Date, u.Name
                                    from Article as a
                                    INNER JOIN User AS u ON u.Id = a.Author
                                    Order by a.Date DESC LIMIT 3;");

define ("GET_ARTICLE", "SELECT a.Id, a.Title, a.Subheading, a.Body, a.Date, u.Name
                        from Article as a
                        INNER JOIN User AS u ON u.Id = a.Author
                        where a.Id = :0;");

define ("ADD_ARTICLE", "Insert INTO Article(Title, Subheading, Body, Author, Date)
                        VALUES (:0, :1, :2, :3, NOW());");

define ("UPDATE_ARTICLE", "UPDATE Article
                          SET Title = :title, Subheading = :subhead, Body = :body, Date = NOW())
                          WHERE Author = :idAuth AND id = :id;");

define ("DELETE_ARTICLE", "DELETE from Article where id = :0;");
