--
-- Database: `mujigae`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `item` varchar(100) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `paid` int(11) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `create_date`, `modified_date`, `item`, `count`, `price`, `paid`, `deleted_at`) VALUES
(1, '2019-04-10 21:17:42', '2019-04-10 15:51:07', 'Item B', 10, 10000, 1, NULL),
(2, '2019-04-10 21:48:01', '2019-04-10 15:45:28', 'Item A Update', 10, 20000, 0, '2019-04-10 22:45:28'),
(3, '2019-04-10 22:49:43', '2019-04-10 15:56:24', 'Item A', 1, 50000, 1, NULL),
(4, '2019-04-10 22:55:00', '2019-04-10 15:55:00', 'Item C', 4, 25000, 0, NULL);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
