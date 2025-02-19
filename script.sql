USE [model]
GO
/****** Object:  Table [dbo].[Catalogue]    Script Date: 05/05/2018 11:00:20 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Catalogue](
	[id] [int] NOT NULL,
	[Product] [varchar](50) NULL,
 CONSTRAINT [PK_Catalogue] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Dealers]    Script Date: 05/05/2018 11:00:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Dealers](
	[id] [int] NOT NULL,
	[local] [varchar](50) NOT NULL,
	[location] [varchar](50) NULL,
	[Rating] [varchar](50) NULL,
 CONSTRAINT [PK_Dealers] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Products]    Script Date: 05/05/2018 11:00:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Products](
	[id] [int] NOT NULL,
	[Product] [varchar](50) NULL,
	[Price] [float] NULL,
	[Company] [varchar](50) NULL,
	[Dateentry] [date] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Users]    Script Date: 05/05/2018 11:00:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Users](
	[id] [int] NOT NULL,
	[account] [varchar](50) NULL,
	[name] [varchar](50) NULL,
	[Password] [varchar](50) NULL,
 CONSTRAINT [PK_Users] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (1, N'super selectos')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (2, N'pear ')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (3, N'watermelon ')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (6, N'Banano')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (8, N'Milk')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (9, N'water melon')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (10, N'green')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (14, N'green apple')
INSERT [dbo].[Catalogue] ([id], [Product]) VALUES (15, N'pineapple')
INSERT [dbo].[Dealers] ([id], [local], [location], [Rating]) VALUES (1, N'Colonia', N'san marcos', N'5')
INSERT [dbo].[Dealers] ([id], [local], [location], [Rating]) VALUES (2, N'super mercado', N'san jacinto', N'4')
INSERT [dbo].[Dealers] ([id], [local], [location], [Rating]) VALUES (3, N'super selectos', N'san marcos', N'5')
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Products] ([id], [Product], [Price], [Company], [Dateentry]) VALUES (14, N'green apple', 2.36, N'Colonia', CAST(N'2018-05-05' AS Date))
INSERT [dbo].[Users] ([id], [account], [name], [Password]) VALUES (1, N'danrode1', N'Daniel', N'123456')
INSERT [dbo].[Users] ([id], [account], [name], [Password]) VALUES (4, N'luis14718', N'Luis Rodriguez ', N'123')
INSERT [dbo].[Users] ([id], [account], [name], [Password]) VALUES (6, N'Danrode', N'Luis Daniel ', N'123')
